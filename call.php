<html>
<head>
<title>Test</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
    $(function() {
        $(".phonecell").click(function(){
            var PhoneNumber = $(this).text();
            PhoneNumber=PhoneNumber.replace("Phone:","");
            window.location.href="tel://"+PhoneNumber;
        });
    });
    </script>
    </head>
    <body>
    <table><tr><td class=phonecell>Phone: 900 300 400</td></tr></table>
    </body>