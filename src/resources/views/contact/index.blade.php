<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us – Get in Touch</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-S..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* ── Previous styles remain the same ── */
        :root {
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --text: #1e293b;
            --text-light: #64748b;
            --bg: #f8fafc;
            --card: #ffffff;
            --border: #e2e8f0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;
            min-height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 960px;
            margin: 0 auto;
            padding: 0 24px;
        }

        header {
            padding: 60px 0 40px;
            text-align: center;
        }

        header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--text);
            margin-bottom: 12px;
        }

        header p {
            color: var(--text-light);
            font-size: 1.1rem;
            max-width: 540px;
            margin: 0 auto;
        }

        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            padding: 40px 0 80px;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        .info-card {
            background: var(--card);
            padding: 32px;
            border-radius: 12px;
            border: 1px solid var(--border);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }

        .info-card h3 {
            color: var(--primary);
            margin-bottom: 16px;
            font-size: 1.25rem;
        }

        .info-item {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 16px;
            font-size: 1.05rem;
        }

        .info-item i {
            color: var(--primary);
            font-size: 1.4rem;
            width: 32px;
            text-align: center;
        }

        .form-card {
            background: var(--card);
            padding: 40px;
            border-radius: 12px;
            border: 1px solid var(--border);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.07);
        }

        .form-group {
            margin-bottom: 24px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--text);
        }

        input,
        textarea {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.2s;
        }

        input:focus,
        textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
        }

        textarea {
            min-height: 140px;
            resize: vertical;
        }

        .submit-btn {
            background: var(--primary);
            color: white;
            border: none;
            padding: 16px 32px;
            font-size: 1.05rem;
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.25s;
            width: 100%;
        }

        .submit-btn:hover {
            background: var(--primary-dark);
            transform: translateY(-1px);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        @media (max-width: 768px) {
            .contact-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            header h1 {
                font-size: 2.2rem;
            }
        }

        /* Just adding alert/message styles */

        .alert {
            padding: 16px 20px;
            border-radius: 8px;
            margin-bottom: 28px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .alert-success {
            background-color: #ecfdf5;
            color: #065f46;
            border: 1px solid #34d399;
        }

        .alert-error {
            background-color: #fef2f2;
            color: #991b1b;
            border: 1px solid #f87171;
        }

        .alert i {
            font-size: 1.3rem;
        }

        .alert-success i {
            color: #10b981;
        }

        .alert-error i {
            color: #ef4444;
        }
    </style>
</head>

<body>

    <div class="container">

        <header>
            <h1>Contact Us</h1>
            <p>We’d love to hear from you. Please fill out the form or reach us using any of the methods below.</p>
        </header>

        <div class="contact-content">

            <!-- Contact Info (same as before) -->
            <!-- Left side – Info / alternative contact ways -->
            <div class="contact-info">

                <div class="info-card">
                    <h3>Our Office</h3>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Dhaka, Bangladesh</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <span>Monday – Friday: 9:00 AM – 6:00 PM</span>
                    </div>
                </div>

                <div class="info-card">
                    <h3>Contact Details</h3>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <span>hello@yourcompany.com</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <span>+880 17XX-XXXXXX</span>
                    </div>
                </div>

            </div>

            <!-- Form + Messages -->
            <div class="form-card">

                <!-- Success / Error Messages -->
                @if (session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i>
                    {{ session('success') }}
                </div>
                @endif

                @if (session('error') || $errors->any())
                <div class="alert alert-error">
                    <i class="fas fa-exclamation-circle"></i>
                    {{ session('error') ?? 'Please correct the errors below.' }}
                    @if ($errors->any())
                    <ul style="margin: 8px 0 0 24px; font-size: 0.95rem;">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input
                            type="text"
                            name="name"
                            id="name"
                            value="{{ old('name') }}"
                            placeholder="John Doe"
                            class="@error('name') is-invalid @enderror"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input
                            type="email"
                            name="email"
                            id="email"
                            value="{{ old('email') }}"
                            placeholder="you@example.com"
                            class="@error('email') is-invalid @enderror"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea
                            name="message"
                            id="message"
                            class="@error('message') is-invalid @enderror"
                            placeholder="How can we help you?"
                            required>{{ old('message') }}</textarea>
                    </div>

                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>

        </div>
    </div>

</body>

</html>