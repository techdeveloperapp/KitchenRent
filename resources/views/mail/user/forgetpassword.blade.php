<table border="0" cellpadding="0" cellspacing="0" width="100%">

        <tr>
            <td align="center" bgcolor="#e9ecef">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                    <tr>
                        <td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
                            <h1 style="margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">Listeo</h1>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center" bgcolor="#e9ecef">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
					  <tr>
                        <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;    padding-bottom: 0;">
                            <p style="margin: 0;"><b>Hello {{$mail_data->name}},<b></p>
                        </td>
                    </tr>
					
                    <tr>
                        <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;padding-top: 10px;">
                            <p style="margin: 0;"><b>Please click on link to reset your password .</p>
                            <a href="{{url('forgot/')}}/{{$token}}">Active</a>
                        </td>
                    </tr> 
                    
                    <tr>
                        <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-bottom: 3px solid #d4dadf">
                            <p style="margin: 0;">Thanks and Regards
                                <br><b>Listeo Admin<b></p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr> 

    </table>