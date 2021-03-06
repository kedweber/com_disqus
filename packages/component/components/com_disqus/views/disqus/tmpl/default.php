<? if($config->shortname && $config->identifier) : ?>
    <div id="disqus_thread"></div>
    
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = '<?= $config->shortname; ?>'; // required: replace example with your forum shortname
        var disqus_identifier= '<?= $config->identifier . (($config->multilingual && JFactory::getLanguage()->getTag() != 'en-GB') ? '_' . substr(JFactory::getLanguage()->getTag(), 0, 2) : '') ?>';
        var disqus_config = function() {
            this.language = '<?= substr(JFactory::getLanguage()->getTag(), 0, 2); ?>';
        };
    
        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    
        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function () {
            var s = document.createElement('script'); s.async = true;
            s.type = 'text/javascript';
            s.src = 'http://' + disqus_shortname + '.disqus.com/count.js';
            (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
        }());
    </script>
    
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
<? endif; ?>