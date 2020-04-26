<?php


class User
{
    public $name;
    public $password;
    public $account;
    public $email;
    public $age;

    public function __construct($name, $age, $email, $account, $password)
    {
        $validateEmail = '/^[0-9a-zA-Z_]+[a-zA-Z0-9]*@[a-zA-Z]+(\.[a-zA-Z]+)$/';
        $validateAccount = '/^[0-9A-Za-z_]{8,}[^.^-^%^_^#^!^@^&^*]$/';
        $validatePassWord = '/^[0-9a-zA-Z]{6,12}$/';
        if (preg_match($validateEmail, $email)) {
            $this->email = $email;
        } else {
            echo '<span style="color:#AFA;text-align:center;font-size: 30px">Invalid email try again please </span>';

        }
        if (preg_match($validateAccount, $account)) {
            $this->account = $account;
        } else {
            echo '<span style="color:#AFA;text-align:center;font-size: 30px">This account must bigger than 8 word </span>';

        }
        if (preg_match($validatePassWord, $password)) {
            $this->password = $password;
        } else {
            echo '<span style="color:#AFA;text-align:center;font-size: 30px">Invalid password please enter again with no special character and longer than 6 word</span>';

        }
        if (preg_match('/^[a-zA-Z]$/')) {
            $this->name = $name;
        } else {
            echo '<span style="color:#AFA;text-align:center;font-size: 30px">please enter your name carefully</span>';

        }
        $validateAge = '/^[0-9]+[0-9]+$/';
        if (preg_match($validateAge, $age)) {
            $this->age = $age;
        } else {
            echo '<span style="color:#AFA;text-align:center; font-size: 30px">age is a number not a word </span>';

        }
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param int $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $account
     */
    public function setAccount($account)
    {
        $this->account = $account;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }
}