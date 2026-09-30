<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Platform Compatibility Notice</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-red: #E53935;
            --dark-red: #C62828;
            --light-gray: #F5F5F5;
            --medium-gray: #757575;
            --dark-gray: #212121;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.1);
            --shadow-md: 0 4px 6px rgba(0,0,0,0.1);
        }
        
        body {
            background-color: #FAFAFA;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            color: var(--dark-gray);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            text-align: center;
            line-height: 1.6;
        }

        .container {
            max-width: 600px;
            background: white;
            border-radius: 12px;
            box-shadow: var(--shadow-md);
            padding: 40px;
            margin: 20px;
            border-top: 4px solid var(--primary-red);
            transform: translateY(0);
            animation: fadeIn 0.5s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .warning-icon {
            font-size: 48px;
            color: var(--primary-red);
            margin-bottom: 20px;
        }

        h1 {
            font-size: 28px;
            font-weight: 600;
            color: var(--primary-red);
            margin-bottom: 16px;
        }

        .subtitle {
            font-size: 18px;
            color: var(--medium-gray);
            margin-bottom: 30px;
            font-weight: 400;
        }

        .message {
            background-color: var(--light-gray);
            border-radius: 8px;
            padding: 20px;
            margin: 25px 0;
            text-align: left;
        }

        .platform-badges {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin: 25px 0;
            flex-wrap: wrap;
        }

        .badge {
            background: linear-gradient(135deg, #f5f5f5 0%, #e0e0e0 100%);
            border-radius: 6px;
            padding: 12px 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 500;
            box-shadow: var(--shadow-sm);
        }

        .badge i {
            font-size: 20px;
        }

        .windows-badge i {
            color: #0078D7;
        }

        .macos-badge i {
            color: #000000;
        }

        .support-note {
            font-size: 15px;
            color: var(--medium-gray);
            margin-top: 30px;
        }

        @media (max-width: 480px) {
            .container {
                padding: 30px 20px;
            }
            
            h1 {
                font-size: 24px;
            }
            
            .subtitle {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="warning-icon">
            <i class="fas fa-exclamation-triangle"></i>
        </div>
        <h1>Platform Compatibility Notice</h1>
        <p class="subtitle">This content requires a supported desktop operating system</p>
        
        <div class="message">
            <p>For optimal security and functionality, this system is only accessible on specific desktop platforms. Mobile devices and unsupported operating systems cannot be granted access.</p>
        </div>
        
        <div class="platform-badges">
            <div class="badge windows-badge">
                <i class="fab fa-windows"></i>
                <span>Windows 10/11</span>
            </div>
        </div>
        
        <p class="support-note">
            Please switch to a supported device or contact IT support if you believe this is an error.
        </p>
    </div>

    <script>
        // Optional: Detect platform and show specific message
        if (navigator.userAgent.match(/Mobile|Android|iPhone|iPad|iPod/i)) {
            document.querySelector('.message p').textContent = 
                "Our security systems have detected you're using a mobile device. For your protection, access is restricted to desktop platforms only.";
        }
    </script>
</body>
</html>
