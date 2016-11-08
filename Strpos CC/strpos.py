import re

with open('nohup.out') as f:
    notice = f.readlines()
    for p in notice:
        p = [s.strip().split(' - $') for s in p.splitlines()]
        for q in p:
            if re.search(r'(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})(.*?)', q[0]) :
                print "from core" + q[0].lstrip()
                with open('strpos.txt', 'a') as file:
                    file.write(q[0].lstrip() + '\n')
                    file.close
            else :
                print "from 1st" + q[0].lstrip()
                with open('strpos.txt', 'a') as file:
                    file.write(q[0].lstrip() + '\n')
                    file.close