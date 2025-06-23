<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Contact Form Submission</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: linear-gradient(135deg, #1e3a8a, #ea580c); color: white; padding: 20px; border-radius: 8px 8px 0 0; }
        .content { background: #f9fafb; padding: 20px; border-radius: 0 0 8px 8px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #374151; }
        .value { margin-top: 5px; padding: 10px; background: white; border-radius: 4px; border-left: 4px solid #3b82f6; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Contact Form Submission</h1>
            <p>Sunshine Industries - Website Contact Form</p>
        </div>
        
        <div class="content">
            <div class="field">
                <div class="label">Name:</div>
                <div class="value">{{ $data['name'] }}</div>
            </div>
            
            <div class="field">
                <div class="label">Email:</div>
                <div class="value">{{ $data['email'] }}</div>
            </div>
            
            @if(!empty($data['phone']))
            <div class="field">
                <div class="label">Phone:</div>
                <div class="value">{{ $data['phone'] }}</div>
            </div>
            @endif
            
            @if(!empty($data['company']))
            <div class="field">
                <div class="label">Company:</div>
                <div class="value">{{ $data['company'] }}</div>
            </div>
            @endif
            
            <div class="field">
                <div class="label">Message:</div>
                <div class="value">{{ $data['message'] }}</div>
            </div>
            
            <div class="field">
                <div class="label">Submitted:</div>
                <div class="value">{{ now()->format('F j, Y \a\t g:i A') }}</div>
            </div>
        </div>
    </div>
</body>
</html>