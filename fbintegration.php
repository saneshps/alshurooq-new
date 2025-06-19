<?php

class FbIntegration
{
    public $page_id = '103325365265321';

    public $user_access_token = 'EAANdQAVq43cBO6kwPRvz3MdE0gZBTpweqi4W9LYd6ECH7WTSFfRl5sXpi6oKD37ma4eyjjhSXtpW5bRanSfwmHGn9ltY1PkEXEkxGHDUuqeGyTizGpdZC7MAoCzZBZByBZAAf7pZAHyzSW0gzjJMD6AwSKR0gl0CF7nwmsL7EMo1zpET0JPqFgJ1c24N50ez0ZD';

    public function newsFeed($token)
    {
        try {

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v18.0/me/feed?fields=full_picture,id,permalink_url,message,created_time&limit=8&access_token=' . $token);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

            $response = curl_exec($ch);
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
            }
            $data = json_decode($response);
            curl_close($ch);

            return $data;
        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }

    public function getAccessToken()
    {
        // Generated @ codebeautify.org
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/' . $this->page_id . '?fields=access_token&access_token=' . $this->user_access_token);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }

        curl_close($ch);

        $token = json_decode($result);

        return $token;
    }

    public function pagePostLikes($postid, $page_access_token)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v18.0/' . $postid . '?fields=reactions.summary(total_count)&access_token=' . $page_access_token);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }

        curl_close($ch);

        $likes = json_decode($result);


        return $likes->reactions;
    }

    public function listFbPosts()
    {

        // news feed 
        $page_token  =  $this->getAccessToken();

        $page_access_token = $page_token->access_token;

        $newsfeed = $this->newsFeed($page_access_token);
        $latestfeed = $newsfeed->data;

        foreach ($latestfeed as $i => $post) {
            $reactions = $this->pagePostLikes($post->id, $page_access_token);

            $latestfeed[$i]->likes = ($reactions->summary && $reactions->summary->total_count) ? $reactions->summary->total_count : 0;
        } //


        return $latestfeed;
    }
}
