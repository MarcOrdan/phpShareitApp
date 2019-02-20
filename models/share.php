<?php

class ShareModel extends Model{
    public function Index(){
        $this->query('SELECT * FROM shares ORDER BY create_date DESC');
        $rows = $this->resultSet();
        return $rows;
    }

    public function add(){
        //sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        if($post['submit']){
            //validate for blank fields
            if($post['title'] == '' || $post['bodu'] == '' || $post['link'] == ''){
                Messages::setMsg('Please fill all fields','error');
                return;
            }
            //insert into mysql
            $this->query('INSERT INTO shares(title,body,link,user_id) VALUES(:title, :body, :link, :userid)');
            $this->bind(':title',$post['title']);
            $this->bind(':body',$post['body']);
            $this->bind(':link',$post['link']);
            $this->bind(':userid', 1);
            $this->execute();
            //verify
            if($this->lastInsertId()){
                //redirect
                header('Location:'.ROOT_URL.'shares');
            }
        }
        return;
       
    }


}