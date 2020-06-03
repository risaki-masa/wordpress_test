If WScript.Arguments.Count = 0 Then
  Set shell = CreateObject("Shell.Application")
  
  '�_�~�[�̈�����ǉ����A�Ǘ��Ҍ����ōĎ��s
  shell.ShellExecute "wscript.exe", """" & WScript.ScriptFullName & """ dummy", "", "runas"
  WScript.Quit  
End If

Const EXECUTION_DIRECTORY = "C:\Projects\WordPress\test\vccw"

Set wShell = CreateObject("WScript.Shell")
wShell.CurrentDirectory = EXECUTION_DIRECTORY
wShell.Run "vagrant destroy", 1, True
