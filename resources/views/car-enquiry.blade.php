<!DOCTYPE html>
<html>
<head>
    <title>New Car Booking Enquiry</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f4f4f4;">
    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #f4f4f4; padding: 20px;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" border="0" style="background-color: #ffffff; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    
                    <!-- Header -->
                    <tr>
                        <td style="background-color: #000000; padding: 20px; text-align: center; border-radius: 8px 8px 0 0;">
                            <h1 style="color: #ffffff; margin: 0; font-size: 24px;">New Booking Enquiry</h1>
                        </td>
                    </tr>
                    
                    <!-- Content -->
                    <tr>
                        <td style="padding: 30px;">
                            
                            <!-- Car Name -->
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom: 25px; background-color: #f8f9fa; border-radius: 8px;">
                                <tr>
                                    <td style="padding: 15px;">
                                        <h2 style="margin: 0; color: #333; font-size: 20px;">{{ $data['car_name'] }}</h2>
                                    </td>
                                </tr>
                            </table>
                            
                            <!-- Customer Details -->
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td width="120" style="padding: 8px 0; color: #666; font-weight: bold;">Name:</td>
                                    <td style="padding: 8px 0; color: #333;">{{ $data['name'] }}</td>
                                </tr>
                                <tr>
                                    <td width="120" style="padding: 8px 0; color: #666; font-weight: bold;">Email:</td>
                                    <td style="padding: 8px 0; color: #333;">
                                        <a href="mailto:{{ $data['email'] }}" style="color: #007bff; text-decoration: none;">{{ $data['email'] }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="120" style="padding: 8px 0; color: #666; font-weight: bold;">Phone:</td>
                                    <td style="padding: 8px 0; color: #333;">
                                        <a href="tel:{{ $data['phone'] }}" style="color: #007bff; text-decoration: none;">{{ $data['phone'] }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="120" style="padding: 8px 0; color: #666; font-weight: bold;">Booking Dates:</td>
                                    <td style="padding: 8px 0; color: #333;">
                                        <strong>From:</strong> {{ date('d M Y', strtotime($data['start_date'])) }}<br>
                                        <strong>To:</strong> {{ date('d M Y', strtotime($data['end_date'])) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td width="120" style="padding: 8px 0; color: #666; font-weight: bold;">Car ID:</td>
                                    <td style="padding: 8px 0; color: #333;">#{{ $data['car_id'] }}</td>
                                </tr>
                            </table>
                            
                            <!-- Divider -->
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin: 25px 0;">
                                <tr>
                                    <td style="border-bottom: 1px solid #ddd;"></td>
                                </tr>
                            </table>
                            
                            <!-- Action Buttons -->
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td align="center">
                                        <table cellpadding="0" cellspacing="0" border="0">
                                            <tr>
                                                <td style="background-color: #25D366; border-radius: 5px; padding: 12px 25px;">
                                                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $data['phone']) }}?text=Hello%20{{ urlencode($data['name']) }}%2C%20thanks%20for%20your%20enquiry%20about%20{{ urlencode($data['car_name']) }}.%20We%20will%20get%20back%20to%20you%20shortly." 
                                                       style="color: #ffffff; text-decoration: none; font-weight: bold;">
                                                        Reply on WhatsApp
                                                    </a>
                                                </td>
                                                <td width="10"></td>
                                                <td style="background-color: #007bff; border-radius: 5px; padding: 12px 25px;">
                                                    <a href="mailto:{{ $data['email'] }}" 
                                                       style="color: #ffffff; text-decoration: none; font-weight: bold;">
                                                        Reply via Email
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            
                        </td>
                    </tr>
                    
                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #f8f9fa; padding: 20px; text-align: center; border-radius: 0 0 8px 8px; border-top: 1px solid #ddd;">
                            <p style="margin: 0; color: #666; font-size: 14px;">
                                This enquiry was sent from your website booking form.<br>
                                <a href="https://mkluxurycarrental.ae" style="color: #007bff; text-decoration: none;">MK Luxury Car Rental</a>
                            </p>
                        </td>
                    </tr>
                    
                </table>
            </td>
        </tr>
    </table>
</body>
</html>