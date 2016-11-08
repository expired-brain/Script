notice = open('list.txt', 'r')
notice = notice.read()
# notice.close()
title = open('title.txt', 'r')
title = title.read()
# title.close()
#notice = notice.lstrip()
notice = notice.replace(" - NoRefund", "")
notice = notice.replace(" ---- ", "_#")
notice = notice.replace(" ", ":")
notice = notice.replace("_#", " ")
notice = notice.replace("_", " ")
notice = [s.strip().split(':') for s in notice.splitlines()] 
index = 0
for p in notice:
    if index == 0:
    	print "\n\n\n ============= copy from here ============\n\n\n"
        print '''<p style="text-align:left"><span style="font-family:trebuchet ms,helvetica,sans-serif"><span style="font-size:18px"><span style="color:#FFFFFF">['''+title+'''</span></span></span></span></p>'''+"\n"+'''<table style="height:27px; width:660px" align="left" border="1" cellpadding="1" cellspacing="1">'''+"\n"+"<tbody>"
    print '''<td style="text-align:center"><span style="color:#FFD700"><strong>'''+ p[0] + ''' </strong> <span style="color:#FFFFFF">(''' + p[1] + ''' valid)</span></span></td>'''
    index += 1
    if index % 2 == 0 :
        print "</tr>"+"\n"+"<tr>"
print "</tbody>"+ "\n"+ "</table>"