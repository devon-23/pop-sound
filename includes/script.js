$(document).ready(function() {
   $('ul.year li').click(function(e) { 
      if (e.target.innerText == 2019) {
         document.getElementById('playlist-container').innerHTML = 
            `<div id="playlist"><iframe id="scaled-frame" src="https://embed.music.apple.com/us/playlist/january-2019-bops/pl.u-WabZlg3udrMvBzx"></iframe></div>` +
            `<div id="playlist"><iframe id="scaled-frame" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/march-2019-bops/pl.u-jV89aqkTdv4qrPM"></iframe></div>` +
            `<div id="playlist"><iframe id="scaled-frame" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/february-2019-bops/pl.u-gxblMKlu5DpMN2k"></iframe></div>` +
            `<div id="playlist"><iframe id="scaled-frame" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/april-2019-bops/pl.u-jV89amLCdv4qrPM"></iframe></div>` +
            `<div id="playlist"><iframe id="scaled-frame" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/may-2019-bops/pl.u-kv9l0qDC79oWBMN"></iframe></div>` +
            `<div id="playlist"><iframe id="scaled-frame" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/june-2019-bops/pl.u-oZylK41IRZk08md"></iframe></div>` +
            `<div id="playlist"><iframe id="scaled-frame" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/july-2019-bops/pl.u-xlyNADNIk32pbZl"></iframe></div>` +
            `<div id="playlist"><iframe id="scaled-frame" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/august-2019-bops/pl.u-oZylKdZtRZk08md"></iframe></div>` +
            `<div id="playlist"><iframe id="scaled-frame" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/september-2019-bops/pl.u-8aAVzl6soPpaBED"></iframe></div>` +
            `<div id="playlist"><iframe id="scaled-frame" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/october-2019-bops/pl.u-oZylKz1tRZk08md"></iframe></div>` +
            `<div id="playlist"><iframe id="scaled-frame" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/november-2019-bops/pl.u-NpXmDvkIm1Ep2Jk"></iframe></div>` +
            `<div id="playlist"><iframe id="scaled-frame" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/december-2019-bops/pl.u-GgA59gbSZR58Jvj"></iframe>`;
      } else if (e.target.innerText == 2020) {
         document.getElementById('playlist').innerHTML = "hi";
      } else if (e.target.innerText == 2021) {
         document.getElementById('playlist').innerHTML = "hi";
      } else if (e.target.innerText == 2022) {
         document.getElementById('playlist').innerHTML = "hi";
      }
    console.log(e.target.innerText)
   });
});