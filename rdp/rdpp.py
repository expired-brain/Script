import wmi_client_wrapper as wmi
wmic = wmi.WmiClientWrapper(
username="win-rmb3drfg33l\administrator",
password="paper123",
host="198.55.110.12",
)
output = wmic.query("SELECT * FROM Win32_Processor")