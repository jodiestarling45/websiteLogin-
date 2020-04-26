<?php


class ManagerUserInfo
{
    public $listUser=[];
    public $array;
    public $fileUserData;
    public function __construct($fileUserData)
    {
        $this->fileUserData=$fileUserData;
    }
    private function getDataJson(){
        $dataJson= file_get_contents($this->fileUserData);
        return json_decode($dataJson,true);
    }
    private function saveDataJson($dataJson){
        $data=json_encode($dataJson);
        file_put_contents($this->fileUserData,$data);
    }
    public function addNewUser($user){
        $users = [
            'name'=>$user->getName(),
            'age'=>$user-> getAge(),
            'account'=>$user->getAccount(),
            'password'=>$user->getPassword(),
            'email'=>$user->getEmail()
        ];
        $data = $this->getDataJson();
        array_push($data,$users);
        $this->saveDataJson($data);
    }
    public function getUser(){

    }
    public function allowLogin($usersAccount){
        $data = $this->getDataJson();
        foreach ($data as $key => $user){
            if ($user['account']== $usersAccount){
                return true;
            }else{
                $key++;
            }

        }
        return false;
    }
    public function checkAccount($users){
        $data=$this->getDataJson();
        foreach ($data as $key =>$user){
            if ($user['account']==$users->getAccount()){
                return true;
            }else{
                $key++;
                return false;
            }
        }
    }
    public function checkPassWord($users){
        $data=$this->getDataJson();
        foreach ($data as $key =>$user){
            if ($user['password']==$users->getPassword()){
                return true;
            }else{
                $key++;
                return false;
            }
        }
    }
}