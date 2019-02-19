<?php

class UserModel extends Model {
    public function register(){
        //sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        $password = md5($post['password']);

        if($post['submit']){
            //insert into mysql
            $this->query('INSERT INTO users(name,email,password) VALUES(:name, :email, :password)');
            $this->bind(':name', $post['name']);
            $this->bind(':email', $post['email']);
            $this->bind(':password', $password);
            $this->execute();
            //verify
            if($this->lastInsertId()){
                //redirect
                header('Location:'.ROOT_URL.'users/login');
            }
        }
        return;
       
    }
}