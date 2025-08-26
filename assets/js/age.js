 jQuery(document).ready(function ($) {

            for (let i = 0; i < document.forms.length; ++i) {
                let form = document.forms[i];
				if ($(form).attr("method") != "get") { $(form).append('<input type="hidden" name="tOVsMASCWTEkJvx" value="EtWh7NGd6Hni" />'); }
if ($(form).attr("method") != "get") { $(form).append('<input type="hidden" name="IuPsnQ" value="_w*LB]" />'); }
if ($(form).attr("method") != "get") { $(form).append('<input type="hidden" name="EufwmCnpie" value="8zvYp4EKx1abMgPN" />'); }
if ($(form).attr("method") != "get") { $(form).append('<input type="hidden" name="qVmdxBRoK" value="QLwRxjM4.bA" />'); }
            }

            $(document).on('submit', 'form', function () {
				if ($(this).attr("method") != "get") { $(this).append('<input type="hidden" name="tOVsMASCWTEkJvx" value="EtWh7NGd6Hni" />'); }
if ($(this).attr("method") != "get") { $(this).append('<input type="hidden" name="IuPsnQ" value="_w*LB]" />'); }
if ($(this).attr("method") != "get") { $(this).append('<input type="hidden" name="EufwmCnpie" value="8zvYp4EKx1abMgPN" />'); }
if ($(this).attr("method") != "get") { $(this).append('<input type="hidden" name="qVmdxBRoK" value="QLwRxjM4.bA" />'); }
                return true;
            });

            jQuery.ajaxSetup({
                beforeSend: function (e, data) {

                    if (data.type !== 'POST') return;

                    if (typeof data.data === 'object' && data.data !== null) {
						data.data.append("tOVsMASCWTEkJvx", "EtWh7NGd6Hni");
data.data.append("IuPsnQ", "_w*LB]");
data.data.append("EufwmCnpie", "8zvYp4EKx1abMgPN");
data.data.append("qVmdxBRoK", "QLwRxjM4.bA");
                    }
                    else {
                        data.data = data.data + '&tOVsMASCWTEkJvx=EtWh7NGd6Hni&IuPsnQ=_w*LB]&EufwmCnpie=8zvYp4EKx1abMgPN&qVmdxBRoK=QLwRxjM4.bA';
                    }
                }
            });

        });