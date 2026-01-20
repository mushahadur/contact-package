<x-mail::message>
<img src="{{ asset('images/logo.png') }}" alt="Mrk Logo" style="max-height: 60px; margin-bottom: 24px;">

# New Contact Form Submission

**Date:** {{ now()->format('F d, Y – H:i') }}

**From:** {{ $name }}  
**Email:** {{ $email }}

**Message:**

<div style="background: #f8f9fa; padding: 16px 20px; border-left: 4px solid #6366f1; margin: 16px 0; white-space: pre-wrap;">
{!! nl2br(e($message)) !!}
</div>

<x-mail::button :url="'mailto:' . $email" color="primary">
    Reply to {{ $name }}
</x-mail::button>

Best regards,<br>
The Mrk Team

<div style="margin-top: 28px; font-size: 13px; color: #6b7280; border-top: 1px solid #e5e7eb; padding-top: 16px;">
    <strong>Mrk</strong><br>
    Innovative Solutions for Tomorrow<br>
    <a href="https://mrk.com" style="color: #4f46e5; text-decoration: none;">https://mrk.com</a><br>
    Email: <a href="mailto:hello@mrk.com" style="color: #4f46e5;">hello@mrk.com</a><br>
    Phone: +880 123 456 7890
</div>

<small style="color: #9ca3af; font-size: 12px; margin-top: 12px; display: block;">
    This is an automated notification from Mrk contact form.
</small>
</x-mail::message>