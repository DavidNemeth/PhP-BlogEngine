<h1>New contact message!</h1>
<h3>Information about your message:</h3>
<p>From: {{ $contact_message->sender }} | {{ $contact_message->email }}</p>
<p>Subject: {{ $contact_message->subject }}</p>
<p>Message: {{ $contact_message->body }}</p>