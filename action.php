<?php

session_start() ;




$pages=["primary";"confirmation"];



include "actions/" . $page . ".php" ;