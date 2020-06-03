If WScript.Arguments.Count = 0 Then
  Set shell = CreateObject("Shell.Application")
  
  '�_�~�[�̈�����ǉ����A�Ǘ��Ҍ����ōĎ��s
  shell.ShellExecute "wscript.exe", """" & WScript.ScriptFullName & """ dummy", "", "runas"
  WScript.Quit  
End If

Const EXECUTION_DIRECTORY = "C:\Projects\WordPress\test\vccw"

Set wShell = CreateObject("WScript.Shell")
wShell.CurrentDirectory = EXECUTION_DIRECTORY
wShell.Run "vagrant up", 1, True

Const CHROME_EXE_NAME = "chrome.exe"
Const ADMIN_URL = "http://test/wp-admin"
Const SITE_URL	= "http://test"

wShell.Run CHROME_EXE_NAME & " -url " & ADMIN_URL, 1, True
wShell.Run CHROME_EXE_NAME & " -url " & SITE_URL, 1, True
wShell.SendKeys "^+i"
