<template>
    <div class="wrap">
        <div class="container">
            <h2>WORKS</h2>
            <p>hogehogehogehogehogehogehogehogehogehogehogehogehogehogehogehogehogehoge</p>
            <div class="works">
                <div>
                    <img :src="'/storage/img.jpg'">
                    <h3>hogehoge(サイト名)</h3>
                    <a href="">urlrulrulrlrlrlrhogehogeghogeheogheo</a>
                </div>
                <div>
                    <img :src="'/storage/img.jpg'">
                    <h3>hogehoge(サイト名)</h3>
                    <a href="">urlrulrulrlrlrlrhogehogeghogeheogheo</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {}
</script>

<style scoped>
    .wrap {
        background-color: #5A5619;
    }

    .container {
        padding-top: 9em;
        padding-bottom: 9em;
        color: #FCFBDF;
        text-align: center;
    }

    .container > p {
        word-break:break-all;
    }

    h2 {
        margin-bottom: 1em;
    }

    .works {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 5em;
    }

    .works > div {
        margin: 2em;
    }

    .works > div:nth-child(1) {
        margin-bottom: 8em;
    }

    img {
        width: 25em;
        margin-bottom: 2em;
    }

    a {
        padding: 1em;
        color: #ffffff;
    }
</style>