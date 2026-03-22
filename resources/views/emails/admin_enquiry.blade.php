<!DOCTYPE html>
<html>
<head>
    <title>New Enquiry Received</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px;">
        <h2 style="color: #D4AF37; text-align: center;">New Enquiry from Learmy Website</h2>
        <p>Hello Admin,</p>
        <p>You have received a new enquiry through the contact form. Here are the details:</p>
        
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="padding: 10px; border-bottom: 1px solid #eee; font-weight: bold;">Name:</td>
                <td style="padding: 10px; border-bottom: 1px solid #eee;">{{ $enquiry->name }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border-bottom: 1px solid #eee; font-weight: bold;">Email:</td>
                <td style="padding: 10px; border-bottom: 1px solid #eee;">{{ $enquiry->email }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border-bottom: 1px solid #eee; font-weight: bold;">Phone:</td>
                <td style="padding: 10px; border-bottom: 1px solid #eee;">{{ $enquiry->phone }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border-bottom: 1px solid #eee; font-weight: bold;">Subject:</td>
                <td style="padding: 10px; border-bottom: 1px solid #eee;">{{ $enquiry->subject ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border-bottom: 1px solid #eee; font-weight: bold;">Message:</td>
                <td style="padding: 10px; border-bottom: 1px solid #eee;">{{ $enquiry->message }}</td>
            </tr>
        </table>
        
        <p style="text-align: center; margin-top: 20px;">
            <a href="{{ route('admin.enquiries.show', $enquiry->id) }}" style="background-color: #D4AF37; color: #000; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-weight: bold;">View in Dashboard</a>
        </p>
    </div>
</body>
</html>
