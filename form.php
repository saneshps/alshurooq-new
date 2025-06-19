<!-- (A) UPLOAD BUTTON & LIST -->
<form>
    <div id="list"></div>
    <input type="button" id="upBrowse" value="Browse">
    <input type="button" id="upToggle" value="Pause OR Continue">
</form>

<!-- (B) LOAD FLOWJS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flow.js/2.14.1/flow.min.js"></script>
<script>
    // (C) INIT FLOWJS
    window.onload = () => {
        // (C1) NEW FLOW OBJECT
        var flow = new Flow({
            target: "3c-resumable.php",
            chunkSize: 1024 * 1024, // 1MB
            singleFile: true
        });

        if (flow.support) {
            // (C2) ASSIGN BROWSE BUTTON
            flow.assignBrowse(document.getElementById("upBrowse"));
            // OR DEFINE DROP ZONE
            // flow.assignDrop(document.getElementById("upDrop"));

            // (C3) ON FILE ADDED
            flow.on("fileAdded", (file, evt) => {
                let fileslot = document.createElement("div");
                fileslot.id = file.uniqueIdentifier;
                fileslot.innerHTML = `${file.name} (${file.size}) - <strong>0%</strong>`;
                document.getElementById("list").appendChild(fileslot);
            });

            // (C4) ON FILE SUBMITTED (ADDED TO UPLOAD QUEUE)
            flow.on("filesSubmitted", (arr, evt) => flow.upload());

            // (C5) ON UPLOAD PROGRESS
            flow.on("fileProgress", (file, chunk) => {
                let progress = (chunk.offset + 1) / file.chunks.length * 100;
                progress = progress.toFixed(2) + "%";
                let fileslot = document.getElementById(file.uniqueIdentifier);
                fileslot = fileslot.getElementsByTagName("strong")[0];
                fileslot.innerHTML = progress;
            });

            // (C6) ON UPLOAD SUCCESS
            flow.on("fileSuccess", (file, message, chunk) => {
                let fileslot = document.getElementById(file.uniqueIdentifier);
                fileslot = fileslot.getElementsByTagName("strong")[0];
                fileslot.innerHTML = "DONE";
            });

            // (C7) ON UPLOAD ERROR
            flow.on("fileError", (file, message) => {
                let fileslot = document.getElementById(file.uniqueIdentifier);
                fileslot = fileslot.getElementsByTagName("strong")[0];
                fileslot.innerHTML = "ERROR";
            });

            // (C8) PAUSE/CONTINUE UPLOAD
            document.getElementById("upToggle").onclick = () => {
                if (flow.isUploading()) {
                    flow.pause();
                } else {
                    flow.resume();
                }
            };
        }
    };
</script>