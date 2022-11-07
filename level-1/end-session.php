<?php

session_start();

// session_destroy(); Destruir a sessão inteira

// unset($_SESSION['ultimo-acesso']); Remover apenas o ultimo acesso

$_SESSION['ultimo-acesso'] = null; // setar como nulo o ultimo acesso
