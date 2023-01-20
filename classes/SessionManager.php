<?php 
class SessionManager{
				private $id = "id";
				private $em = "Email";

				public function isLoggedin(){
					if(isset($_SESSION[$this->id])) {
						return true;

					}else{
						return false;
					}
				}

				public function setLoggdin($id){
			      $_SESSION[$this->id]= $id;
				}

				public function logout(){
					unset($_SESSION[$this->id]);
				}

           
				public function isSignout(){
					if(isset($_SESSION[$this->em])) {
						return true;

					}else{
						return false;
					}
				}

				public function setSignout($em){
			      $_SESSION[$this->em]= $em;
				}

				public function signout(){
					unset($_SESSION[$this->em]);
				}

			 public function getNm(){
			    return $this->em = "Email";
			 }

			}





