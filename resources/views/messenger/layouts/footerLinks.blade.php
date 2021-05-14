
<script src="{{asset('assets/js/code.js') }}"></script>
 <!-- Twilio Common helpers and Twilio Chat JavaScript libs from CDN. -->
 <script src="//media.twiliocdn.com/sdk/js/common/v0.1/twilio-common.min.js"></script>
 <script src="//media.twiliocdn.com/sdk/js/chat/v4.0/twilio-chat.min.js"></script>
 <script src="{{ asset('assets/js/twiliochat.js') }}"></script>
<script>
  // Messenger global variable - 0 by default
  messenger = "{{ @$id }}";
  </script>