<?php
session_start();
require_once 'application/core/dbconnect.php';//����� ������
require_once 'application/core/language.php'; //����� ��������
require_once 'application/core/view.php';//����� ����������� ����
require_once 'application/core/controller.php';// ����� �������� �����������
require_once 'application/core/route.php'; //����� �������������
Route::start(); // ��������� �������������
?>