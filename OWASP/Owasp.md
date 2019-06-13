# **OWASP**

 Abbreviation OWASP stands for **Open Web Application Security Project**.
 It is non commercial organisation created to help develop secure applications
and detect security leaks.

# **Core Values**

**OPEN** Everything at OWASP is radically transparent from our finances to our code.

**INNOVATION** OWASP encourages and supports innovation and experiments for solutions to software security challenges.

**GLOBAL** Anyone around the world is encouraged to participate in the OWASP community.

**INTEGRITY** OWASP is an honest and truthful, vendor neutral, global community.

OWASP have a bunch of project which could be find by this [link](https://www.owasp.org/index.php/Category:OWASP_Project#tab=Project_Inventory)
  
Here I will discover TOP - 10 web vulnerabilities [link](https://www.owasp.org/images/9/96/OWASP_Top_10-2017-ru.pdf)

**Helpful OWASP projects**

[OWASP testing Project](https://www.owasp.org/index.php/OWASP_Testing_Project)
[OWASP guid project](https://www.owasp.org/index.php/OWASP_Guide_Project)

# **TOP Ten vulnerabilities** 

* **A1:2017-Injection**
  Injection flaws, such as SQL, NoSQL, OS, and LDAP injection, occur when untrusted data is sent
  to an interpreter as part of a command or query. The attacker’s hostile data can trick the
  interpreter into executing unintended commands or accessing data without proper authorization.
  
* **A2:2017-Broken Authentication**
 Application functions related to authentication and session management are often implemented
 incorrectly, allowing attackers to compromise passwords, keys, or session tokens, or to exploit
 other implementation flaws to assume other users’ identities temporarily or permanently.
 
* **A3:2017- Sensitive Data Exposure**
 Many web applications and APIs do not properly protect sensitive data, such as financial,
 healthcare, and PII. Attackers may steal or modify such weakly protected data to conduct credit
 card fraud, identity theft, or other crimes. Sensitive data may be compromised without extra
 protection, such as encryption at rest or in transit, and requires special precautions when
 exchanged with the browser

* **A4:2017-XML External Entities (XXE)**
 Many older or poorly configured XML processors evaluate external entity references within XML
 documents. External entities can be used to disclose internal files using the file URI handler,
 internal file shares, internal port scanning, remote code execution, and denial of service attacks.
 
* **A5:2017-Broken Access Control**
 Restrictions on what authenticated users are allowed to do are often not properly enforced.
 Attackers can exploit these flaws to access unauthorized functionality and/or data, such as access
 other users' accounts, view sensitive files, modify other users’ data, change access rights, etc.
 
* **A6:2017-Security Misconfiguration**
 Security misconfiguration is the most commonly seen issue. This is commonly a result of insecure
 default configurations, incomplete or ad hoc configurations, open cloud storage, misconfigured
 HTTP headers, and verbose error messages containing sensitive information. Not only must all
 operating systems, frameworks, libraries, and applications be securely configured, but they must
 be patched and upgraded in a timely fashion.
 
* **A7:2017-Cross-Site Scripting (XSS)**
 XSS flaws occur whenever an application includes untrusted data in a new web page without
 proper validation or escaping, or updates an existing web page with user-supplied data using a
 browser API that can create HTML or JavaScript. XSS allows attackers to execute scripts in the
 victim’s browser which can hijack user sessions, deface web sites, or redirect the user to
 malicious sites.
 
* **A8:2017-Insecure Deserialization**
 Insecure deserialization often leads to remote code execution. Even if deserialization flaws do not
 result in remote code execution, they can be used to perform attacks, including replay attacks,
 injection attacks, and privilege escalation attacks. 
 
* **A9:2017-Using Components with Known Vulnerabilities**
 Components, such as libraries, frameworks, and other software modules, run with the same
 privileges as the application. If a vulnerable component is exploited, such an attack can facilitate
 serious data loss or server takeover. Applications and APIs using components with known
 vulnerabilities may undermine application defenses and enable various attacks and impacts. 
 
* **A10:2017-Insufficient Logging & Monitoring**
 Insufficient logging and monitoring, coupled with missing or ineffective integration with incident
 response, allows attackers to further attack systems, maintain persistence, pivot to more systems,
 and tamper, extract, or destroy data. Most breach studies show time to detect a breach is over
 200 days, typically detected by external parties rather than internal processes or monitoring. 
