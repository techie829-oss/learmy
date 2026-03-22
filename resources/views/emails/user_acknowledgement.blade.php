<!DOCTYPE html>
<html>
<head>
    <title>Thank You for Your Enquiry</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-top: 5px solid #D4AF37; border-radius: 10px;">
        <h2 style="color: #D4AF37; text-align: center;">Hello {{ $enquiry->name }},</h2>
        <p style="text-align: center; font-size: 1.25rem;">Thank you for reaching out to **Learmy Educoach**!</p>
        
        <p>We've received your enquiry and our team will get back to you as soon as possible.</p>
        
        <div style="background-color: #f9f9f9; padding: 20px; border-radius: 10px; margin: 20px 0;">
            <p style="margin: 0; font-weight: bold;">Your Enquiry Details:</p>
            <p style="margin: 5px 0 0 0; color: #666;">
                <strong>Subject:</strong> {{ $enquiry->subject ?? 'General Enquiry' }}<br>
                <strong>Message:</strong> {{ $enquiry->message }}
            </p>
        </div>
        

        
        <p style="text-align: center; margin-top: 30px; font-size: 0.8rem; color: #999;">
            © {{ date('Y') }} Learmy Educoach. All rights reserved.<br>
            Empowering Talent in Music & Academics
        </p>
    </div>
</body>
</html>
