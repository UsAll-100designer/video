<link rel="stylesheet" type="text/css" href="../../share/css/product.css?ver=<?=time()?>" />
<style>
    .welcomeWarp {background-color: #26352c;}
    .welcome_content {position: relative;max-width: 1160px;margin: 0 auto;}
    .video-container {position: relative;height: 0;padding-bottom: 56.25%;}
    .video-container video {position: absolute;top: 0;left: 0;width: 100%;height: 100%;}
</style>
<div class="welcomeWarp">
    <div class="welcome_content">
        <div class="welcome_01">
            <img src="https://us-campus.co.kr/img/welcome/01.jpg">
        </div>
        <div class="welcome_02">
            <img src="https://us-campus.co.kr/img/welcome/02.jpg">
        </div>
        <div class="welcome_03">
            <img src="https://us-campus.co.kr/img/welcome/03.jpg">
        </div>
        <div class="welcome_04">
            <img src="https://us-campus.co.kr/img/welcome/04.jpg">
        </div>
        <div class="welcome_05" onclick="fnVodPlayer('STUDY', 'https://chinatan.smilecast.co.kr/video/us-campus/howto_join.mp4');" style="cursor:pointer;">
            <img src="https://us-campus.co.kr/img/welcome/05.jpg">
            <div class="howto_join">
            </div>
        </div>
        <div class="welcome_06">
            <img src="https://us-campus.co.kr/img/welcome/06.jpg">
        </div>
        <div class="welcome_07-01" onclick="fnVodPlayer('STUDY', 'https://chinatan.smilecast.co.kr/video/us-campus/howto_move.mp4');" style="cursor:pointer;">
            <img src="https://us-campus.co.kr/img/welcome/07_01.png">
        </div>
        <div class="welcome_07-02">
            <img src="https://us-campus.co.kr/img/welcome/07_02.png">
        </div>
        <div class="welcome_08">
            <img src="https://us-campus.co.kr/img/welcome/08_01.png">
            <div class="video-container">
                <video muted allowfullscreen controls autoplay>
                    <source src="https://chinatan.smilecast.co.kr/video/us-campus/func_01.mp4" type="video/mp4" />
                </video>
            </div>
            <img src="https://us-campus.co.kr/img/welcome/08_02.png">
            <div class="video-container">
                <video muted allowfullscreen controls autoplay>
                    <source src="https://chinatan.smilecast.co.kr/video/us-campus/func_02.mp4" type="video/mp4" />
                </video>
            </div>
            <img src="https://us-campus.co.kr/img/welcome/08_03.png">
            <div class="video-container">
                <video muted allowfullscreen controls autoplay>
                    <source src="https://chinatan.smilecast.co.kr/video/us-campus/func_03.mp4" type="video/mp4" />
                </video>
            </div>
            <img src="https://us-campus.co.kr/img/welcome/08_04.png">
            <img src="https://us-campus.co.kr/img/welcome/08_05.png">
        </div>
        <div class="welcome_09">
            <img src="https://us-campus.co.kr/img/welcome/09.jpg">
        </div>
        <div class="welcome_10">
            <img src="https://us-campus.co.kr/img/welcome/10.jpg">
        </div>
        <div class="welcome_11">
            <img src="https://us-campus.co.kr/img/welcome/11.jpg">
        </div>
        <div class="welcome_12">
            <img src="https://us-campus.co.kr/img/welcome/12.jpg">
        </div>
    </div>
</div>

<!--playerPopup 영상 -->
<style>
.layerPop{position:fixed;width:100%;height:100%;left:0;top:0;z-index:1111111111}
.behindBg{width: 100%;height: 100%;}
.layerPop .popup_in{position:absolute;left:0;top:0;width:90%; max-width: 1080px; background:#fff;z-index:111111;}
.layerPop .close{position: absolute;top: -3rem;right: 0px; width: 2.5rem;}
.close {float:right;padding-bottom:20px;}
</style>
<div class="layerPop" id="playerPopup" style="display:none;">
    <div class="behindBg" onclick="fnVodPlayerClose();"></div>
    <div class="popup_in">
        <div class="close"><a href="javascript:;" onclick="fnVodPlayerClose();"><img src="/img/common/video_pop_close.png" alt="닫기" /></a></div>
        <div class="con" id="con">
            <div class="embed-container" style="display:none;" id="player_youtube">
            </div>
            <div class="vod_palay" style="display:none;" id="player_study">
            </div>
        </div>
    </div>
</div>
<!--playerPopup 영상 -->
<script src="/share/js/main.js?ver=<?=time();?>"></script>
<script>
    //최근영상 팝업
    function fnVodPlayer(ptype, url){
        var txt = '';
        if(ptype=='YOUTUBE') {
            $("#player_study").html('');
            $("#player_study").hide();

            txt = '<iframe height="100%" width="100%" src="'+url+'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen name="video_frame" id="video_frame"></iframe>';
            $("#player_youtube").html(txt);
            $("#player_youtube").show();
        } else if(ptype=='STUDY'){
            $("#player_youtube").html('');
            $("#player_youtube").hide();

            txt = '<video height="100%" width="100%" controls autoplay controlsList="nodownload"><source src="'+url+'" type="video/mp4"  id="mp4_player"></video>';
            $("#player_study").html(txt);
            $("#player_study").show();
        }

        fnOpenLayer('playerPopup');
    }

    //최근영상 팝업 닫기
    function fnVodPlayerClose(){
        fnClose('playerPopup');
        $("#player_youtube").html('');
        $("#player_study").html('');
    }
</script>