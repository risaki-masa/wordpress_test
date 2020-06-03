Const CHROME_EXE_NAME = "chrome.exe"
Const URL = "http://test"

Set wShell = CreateObject("WScript.Shell")
wShell.Run CHROME_EXE_NAME & " -url " & URL, 1, True
wShell.SendKeys "^+i"