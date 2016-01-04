<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Solved by Flexbox &mdash; Cleaner, hack-free CSS</title>

    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name=viewport content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="A showcase of problems once hard or impossible to solve with CSS alone, now made trivially easy with Flexbox.">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">

    <link href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet" type="text/css">

    <script class="js-allow-before-footer">

        var mediaQueryOpts = {
            mediaQueryDefinitions: [
                {
                    name: 'Breakpoint',
                    dimensionIndex: 1,
                    items: [
                        {name: 'xs', media: 'all'},
                        {name: 'sm', media: '(min-width: 384px)'},
                        {name: 'md', media: '(min-width: 576px)'},
                        {name: 'lg', media: '(min-width: 768px)'}
                    ]
                },
                {
                    name: 'Resolution',
                    dimensionIndex: 2,
                    items: [
                        {name: '1x',   media: 'all'},
                        {name: '1.5x', media: '(-webkit-min-device-pixel-ratio: 1.5), ' +
                        '(min-resolution: 144dpi)'},
                        {name: '2x',   media: '(-webkit-min-device-pixel-ratio: 2), ' +
                        '(min-resolution: 192dpi)'},
                    ]
                },
                {
                    name: 'Orientation',
                    dimensionIndex: 3,
                    items: [
                        {name: 'landscape', media: '(orientation: landscape)'},
                        {name: 'portrait',  media: '(orientation: portrait)'}
                    ]
                }
            ]
        };

    </script>

    <script async src="https://www.google-analytics.com/analytics.js"></script>
    <script async id="twitter-wjs" src="https://platform.twitter.com/widgets.js"></script>

</head>

<body class="Site">
<header class="Site-header">
    <div class="Header" role="banner">
        <div class="Header-titles">
            <h1 class="Header-title"><a href="index.html">Solved <i>by</i> Flexbox</a></h1>
            <h2 class="Header-subTitle">Cleaner, hack-free CSS</h2>
        </div>
        <div class="Header-actions">
            <a class="Header-button Button Button--action Button--wide"
               data-social-network="Github"
               data-social-action="view-source"
               data-social-target="https://github.com/philipwalton/solved-by-flexbox"
               href="https://github.com/philipwalton/solved-by-flexbox">
                <span class="icon-github icon-large"></span>&nbsp; View Project Source
            </a>
            <a class="Header-button Button Button--wide"
               data-social-network="Twitter"
               data-social-action="tweet"
               data-social-target="http://philipwalton.github.com/solved-by-flexbox/"
               href="https://twitter.com/intent/tweet?text=A%20showcase%20of%20traditionally%20hard%20CSS%20problems%2C%20easily%20solved%20using%20flexbox.&url=http://philipwalton.github.com/solved-by-flexbox/&via=philwalton">
                <span class="icon-twitter icon-large twitter-color"></span>&nbsp; Spread the Word
            </a>
        </div>

    </div>
</header>
<main class="Site-content Site-content--full">

    <section class="Section">
        <div class="Container">
            <h2 class="Section-heading">Introduction</h2>
            <p>CSS has been lacking proper layout mechanisms for far too long. Transitions, animations, filters, all of these are great and useful additions to the language, but they don't address the major problems that Web developers have been complaining about for what seems like an eternity.</p>
            <p>Finally, thanks to <a href="http://www.w3.org/TR/css3-flexbox/">Flexbox</a>, we have a solution.</p>
            <p>This site is not another CSS framework. Instead, its purpose is to showcase problems once hard or impossible to solve with CSS alone, now made trivially easy with Flexbox. And with the recent release of Internet Explorer 11 and Safari 6.1, the latest Flexbox spec is now supported in every modern browser.</p>
            <p>Check out the demos below. View the styles in the Web inspector or dive into <a href="https://github.com/philipwalton/solved-by-flexbox">the source</a> to see just how easy CSS layout will become once Flexbox becomes mainstream.</p>
        </div>
    </section>

    <section class="Section">
        <div class="Container">
            <h2 class="Section-heading">Showcase</h2>
            <ul class="Grid Grid--guttersLg">

                <li class="Grid-cell u-full u-med-1of2 u-large-1of3">
                    <div class="Feature">
                        <a href="demos/grids/index.html">
                            <figure class="Feature-figure">
                                <img class="Feature-image" alt="Better, Simpler Grid Systems" src="images/grids.jpg">
                            </figure>
                            <h3 class="Feature-title">Better, Simpler Grid Systems</h3>
                        </a>
                        <p class="Feature-description">Flexbox gives us most of the features we want from a grid system out of the box. And sizing and alignment are just one or two properties away.</p>
                    </div>
                </li>

                <li class="Grid-cell u-full u-med-1of2 u-large-1of3">
                    <div class="Feature">
                        <a href="demos/holy-grail/index.html">
                            <figure class="Feature-figure">
                                <img class="Feature-image" alt="Holy Grail Layout" src="images/holy-grail.jpg">
                            </figure>
                            <h3 class="Feature-title">Holy Grail Layout</h3>
                        </a>
                        <p class="Feature-description">This classic problem has been challenging CSS hackers for years, yet none of the historical solutions have fully solved it. With Flexbox, it's finally possible.</p>
                    </div>
                </li>

                <li class="Grid-cell u-full u-med-1of2 u-large-1of3">
                    <div class="Feature">
                        <a href="demos/input-add-ons/index.html">
                            <figure class="Feature-figure">
                                <img class="Feature-image" alt="Input Add-ons" src="images/input-add-ons.jpg">
                            </figure>
                            <h3 class="Feature-title">Input Add-ons</h3>
                        </a>
                        <p class="Feature-description">Creating full-width, fluid input/button pairs has been impossible for most of the history of CSS. With Flexbox it couldn't be easier.</p>
                    </div>
                </li>

                <li class="Grid-cell u-full u-med-1of2 u-large-1of3">
                    <div class="Feature">
                        <a href="demos/media-object/index.html">
                            <figure class="Feature-figure">
                                <img class="Feature-image" alt="Media Object" src="images/media-object.jpg">
                            </figure>
                            <h3 class="Feature-title">Media Object</h3>
                        </a>
                        <p class="Feature-description">Create media objects with fixed or varying figure sizes without worrying about overflow, clearfixing, or block formatting context hacks.</p>
                    </div>
                </li>

                <li class="Grid-cell u-full u-med-1of2 u-large-1of3">
                    <div class="Feature">
                        <a href="demos/sticky-footer/index.html">
                            <figure class="Feature-figure">
                                <img class="Feature-image" alt="Sticky Footer" src="images/sticky-footer.jpg">
                            </figure>
                            <h3 class="Feature-title">Sticky Footer</h3>
                        </a>
                        <p class="Feature-description">Getting your footer to stick to the bottom of sparsely contented pages has always been tricky. And if the footer's height is unknown, it's basically impossible. Not so anymore.</p>
                    </div>
                </li>

                <li class="Grid-cell u-full u-med-1of2 u-large-1of3">
                    <div class="Feature">
                        <a href="demos/vertical-centering/index.html">
                            <figure class="Feature-figure">
                                <img class="Feature-image" alt="Vertical Centering" src="images/vertical-centering.jpg">
                            </figure>
                            <h3 class="Feature-title">Vertical Centering</h3>
                        </a>
                        <p class="Feature-description">This classic problem has been challenging CSS hackers for years, yet none of the historical solutions have fully solved it. With Flexbox, it's finally possible.</p>
                    </div>
                </li>

            </ul>
        </div>
    </section>

    <section class="Section">
        <div class="Container">
            <h2 class="Section-heading">Browser Support</h2>

            <ul class="Grid Grid--guttersLg Grid--justifyCenter">
                <li class="Grid-cell Grid-cell--autoSize">
                    <div class="Browser Browser--chrome" title="Since 2012-07-31">
                        <figure class="Browser-image"></figure>
                        Chrome<br>21+
                    </div>
                </li>
                <li class="Grid-cell Grid-cell--autoSize">
                    <div class="Browser Browser--opera" title="Since 2012-11-05">
                        <figure class="Browser-image"></figure>
                        Opera<br>12.1+
                    </div>
                </li>
                <li class="Grid-cell Grid-cell--autoSize">
                    <div class="Browser Browser--firefox" title="Since 2013-06-25">
                        <figure class="Browser-image"></figure>
                        Firefox<br>22+
                    </div>
                </li>
                <li class="Grid-cell Grid-cell--autoSize">
                    <div class="Browser Browser--safari" title="Since 2013-06-11">
                        <figure class="Browser-image"></figure>
                        Safari<br>6.1+
                    </div>
                </li>
                <li class="Grid-cell Grid-cell--autoSize">
                    <div class="Browser Browser--ie" title="Since 2012-09-04">
                        <figure class="Browser-image"></figure>
                        IE<br>10+
                    </div>
                </li>
            </ul>

            <h3 class="Section-heading">Caveats and Known Issues</h3>
            <ul class="Section-list">
                <li>IE 10 has Flexbox support but for a <a href="http://www.w3.org/TR/2012/WD-css3-flexbox-20120322/">draft version</a> of the current spec: (<code>display:flexbox</code>).</li>
                <li>Safari 6 and earlier support the <a href="http://www.w3.org/TR/2009/WD-css3-flexbox-20090723/">original</a> Flexbox syntax, which is now obsolete: (<code>display:box</code>).</li>
                <li>Firefox 27 and earlier do not support multi-line flexboxes. See <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=702508">this bug</a> for more details.</li>
                <li>For a full browser support comparison, check out <a href="http://caniuse.com/flexbox">caniuse.com/flexbox</a></li>
            </ul>
        </div>
    </section>

    <section class="Section">
        <div class="Container">
            <h2 class="Section-heading">About the Code</h2>
            <p>All of the code samples on this site show how to solve a particular design problem with Flexbox. They show just the code that's needed to make the demos work in a spec-compliant browser. Some browsers do not fully comply with the latest version of the spec, so sadly, a few workarounds were necessary.</p>
            <p>Workarounds for non-compliant browsers are not shown in the code samples, but if you're curious about those implementation details, you can check out the source files. Each demo links to its source, and all browser-specific workarounds are well-documented, so don't be afraid to take a look.</p>
            <p>The vendor prefixing and translating of current flex properties to their legacy equivalents is all handled by <a href="https://github.com/ai/autoprefixer">autoprefixer</a>. If you're writing Flexbox code and not using autoprefixer, well, you're making a horrible mistake.</p>
            <p>The class naming convention used in the code samples and source files is taken from <a href="https://github.com/suitcss/suit">SUIT CSS</a>, which is based on BEM methodologies. Each example includes one or more reusable CSS components allowing you to adapt or copy these patterns in to your own projects. Links are provided to their respective components on each example page.</p>
            <p>If you find a mistake or would like to suggest an additional example, feel free to open an issue or submit a pull request on <a href="https://github.com/philipwalton/solved-by-flexbox">Github</a>.</p>
        </div>
    </section>

</main>
<footer class="Site-footer">
    <div class="Footer">
        <span class="Footer-social">
  <iframe class="github-btn" src="https://ghbtns.com/github-btn.html?user=philipwalton&repo=solved-by-flexbox&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="106px" height="20px"></iframe>
  <a href="https://twitter.com/philwalton" class="twitter-follow-button" data-show-count="true" data-lang="en">@philwalton</a>
  <a href="https://twitter.com/share" class="twitter-share-button" data-text="A showcase of traditionally hard CSS problems, easily solved using flexbox." data-url="http://philipwalton.github.io/solved-by-flexbox/" data-count="horizontal" data-via="philwalton" data-related="philwalton:Creator of Solved by Flexbox">Tweet</a>
</span>
        <div class="Footer-credits">
            <span class="Footer-credit">Created and maintained by <a href="http://philipwalton.com">Philip Walton</a>.</span>

            <span class="Footer-credit">Source code and examples released under the <a href="https://github.com/philipwalton/solved-by-flexbox/blob/master/LICENSE">MIT</a> license.</span>

            <span class="Footer-credit">Website and documentation licensed under <a href="https://creativecommons.org/licenses/by/4.0/">CC BY 4.0</a>.</span>
        </div>

    </div>
</footer>
<script src="main.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/html-inspector/0.8.2/html-inspector.js"></script>
<script>
    HTMLInspector.rules.extend('unused-classes', function(config) {
        config.whitelist = config.whitelist.concat([
            /^icon/,
            /^wf-/,
            /^hljs-/,
            /^twitter-/
        ]);
        return config;
    })

    HTMLInspector.rules.extend('script-placement', function(config) {
        config.whitelist = config.whitelist.concat([
            '[async]',
            '.js-allow-before-footer'
        ]);
        return config;
    });

    HTMLInspector.inspect({excludeElements: ['svg', 'iframe']});
</script>


</body>
</html>
