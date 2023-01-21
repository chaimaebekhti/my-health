<?php 
class SessionManager{
	
				private $em = "Email";

				public function isLogin(){
					if(isset($_SESSION[$this->id])) {
						return true;

					}else{
						return false;
					}
				}

				public function setLogin($id){
			      $_SESSION[$this->id]= $id;
				}

				public function login(){
					unset($_SESSION[$this->id]);
				}

           

			 public function getNm(){
			    return $this->em = "Email";
			 }

			}





