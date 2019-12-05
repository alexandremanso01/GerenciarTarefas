<?php
session_start();
unset($_SESSION['sessao']);
echo ("<script>window.location.href='index.html';</script>");
?>