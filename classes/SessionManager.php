<?php 
class SessionManager{
				private $ad = "id";
				private $em = "Email";

				public function isLogin(){
					if(isset($_SESSION[$this->ad])) {
						return true;

					}else{
						return false;
					}
				}

				public function setLogin($ad){
			      $_SESSION[$this->ad]= $ad;
				}

				public function Login(){
					unset($_SESSION[$this->ad]);
				}

           
		
			 public function getNm(){
			    return $this->em = "Email";
			 }

			}









