<?php
/*
	������������ �������������� ������ - headers.inc.php 
	������������ ������������ HTTP-���������� ��� Web - ����������
	14.02.2020
*/
//-- �������� ������ ��� :
//-- 1. ������ ����� �������� ������ �� �������� ��������
//-- 2. ���������� ��������� ����������� ������������ �� �������
session_start();

//-- ������������� ������� text/html � ������� �������� win-1251
header("Content-type: text/html; charset=win-1251");