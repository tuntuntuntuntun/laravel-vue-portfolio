<template>
    <div class="wrap">
        <div class="container">
            <h2>ABOUT</h2>
            <p>こんにちは！！</p>
            <div class="introduction">
                <img :src="'/storage/img.jpg'" alt="">
                <p>こんにちは！！こんにちは！！こんにちは！！こんにちは！！こんにちは！！こんにちは！！こんにちは！！こんにちは！！こんにちは！！</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {}
</script>

<style scoped>
.container {
    padding-top: 9em;
    padding-bottom: 9em;
    text-align: center;
}

h2 {
    margin-bottom: 2em;
}

.introduction {
    display: flex;
}

.introduction p {
    text-align: left;
}

img {
    width: 10em;
    margin-right: 2em;
}
</style>