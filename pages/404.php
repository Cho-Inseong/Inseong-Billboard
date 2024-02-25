<style>
    body {
        height: 100vh;
        margin: 0;
        background: linear-gradient(to right, #8e44ad, #3498db);
    }

    body h1 {
        text-align: center;
    }
</style>
<body>
    <h1 id="headerTitle">에러 났다ㅏㅏㅏㅏㅏㅏ</h1>
</body>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var rainbowText = document.getElementById('headerTitle');
    var text = rainbowText.innerText;

    function updateRainbowText() {
        rainbowText.innerHTML = ""; // 기존 텍스트를 비웁니다.
        var colors = ['#FF0000', '#FF7F00', '#FFFF00', '#00FF00', '#0000FF', '#4B0082', '#9400D3']; // 무지개 색상
        for (let i = 0; i < text.length; i++) {
            let charElem = document.createElement('span');
            charElem.style.color = colors[(i + colorShift) % colors.length];
            charElem.textContent = text[i];
            rainbowText.appendChild(charElem);
        }
        colorShift = (colorShift + 1) % colors.length; // 색상 이동
    }

    let colorShift = 0;
    updateRainbowText(); // 초기 무지개 텍스트 설정
    setInterval(updateRainbowText, 100); // 1000ms(1초)마다 색상 변경
});
</script>