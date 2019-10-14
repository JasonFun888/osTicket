        </div>
    </div>
    <div id="footer">
        <p><?php echo __('Copyright &copy;'); ?> <?php echo date('Y'); ?> <?php
        echo Format::htmlchars((string) $ost->company ?: 'osTicket.com'); ?> - <?php echo __('All rights reserved.'); ?></p>
        <a id="poweredBy" href="https://osticket.com" target="_blank"><?php echo __('Helpdesk software - powered by osTicket'); ?></a>
    </div>
<div id="overlay"></div>
<div id="loading">
    <h4><?php echo __('Please Wait!');?></h4>
    <p><?php echo __('Please wait... it will take a second!');?></p>
</div>
<?php
if (($lang = Internationalization::getCurrentLanguage()) && $lang != 'en_US') { ?>
    <script type="text/javascript" src="ajax.php/i18n/<?php
        echo $lang; ?>/js"></script>
<?php } ?>
<script type="text/javascript">
    getConfig().resolve(<?php
        include INCLUDE_DIR . 'ajax.config.php';
        $api = new ConfigAjaxAPI();
        print $api->client(false);
    ?>);
</script>

<!-- Chat Widget Start -->

<!-- Live help embed code - Widget -->
<script type="text/javascript">
var LHCChatOptions = {};
LHCChatOptions.opt = {widget_height:140,widget_width:300,popup_height:520,popup_width:500};
(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
var referrer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf('://')+1)) : '';
var location  = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : '';
po.src = '//chat.segwaydiscovery.com/index.php/chat/getstatus/(click)/internal/(position)/bottom_right/(ma)/br/(top)/350/(units)/pixels/(leaveamessage)/true?r='+referrer+'&l='+location;
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>


<!-- FAQ embed code - Widget -->
<script type="text/javascript">
var LHCFAQOptions = {status_text:'FAQ',url:'replace_me_with_dynamic_url',identifier:''};
(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
po.src = '//chat.segwaydiscovery.com/index.php/faq/getstatus/(position)/middle_right/(top)/450/(units)/pixels';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>

<!-- Questionary embed code - Widget -->
<script type="text/javascript">
var LHCVotingOptions = {status_text:'Help us to grow'};
(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
po.src = '//chat.segwaydiscovery.com/index.php/questionary/getstatus/(position)/middle_right/(top)/400/(units)/pixels/(width)/300/(height)/300';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>

<!-- Chatbox embed code - Widget -->
<script type="text/javascript">
var LHCChatboxOptions = {hashchatbox:'empty',identifier:'default',status_text:'Chatbox'};
(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
po.src = '//chat.segwaydiscovery.com/index.php/chatbox/getstatus/(position)/middle_right/(top)/300/(units)/pixels/(width)/300/(height)/300/(chat_height)/220';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>

<!-- Browse offers embed code - Embed code -->
<script type="text/javascript">
var LHCBROWSEOFFEROptions = {};
(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
var referrer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf('://')+1)) : '';
var location  = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : '';
po.src = '//chat.segwaydiscovery.com/index.php/browseoffer/getstatus/(size)/450/(height)/450/(units)/pixels/(showoverlay)/true?r='+referrer+'&l='+location;
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>

<!-- Chat Widget Stop -->

</body>
</html>
