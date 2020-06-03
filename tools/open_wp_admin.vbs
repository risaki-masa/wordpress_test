Const CHROME_EXE_NAME = "chrome.exe"
Const URL = "http://test/admin"

Set wShell = CreateObject("WScript.Shell")
wShell.Run CHROME_EXE_NAME & " -url " & URL