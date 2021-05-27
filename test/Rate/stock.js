const puppeteer = require('puppeteer');
url = ['https://www.skis.com.tw/nsk/research/1020944/1020944_0.HTM',
    'https://www.skis.com.tw/nsk/research/1020945/1020945_0.HTM',
    'https://www.skis.com.tw/nsk/research/1020946/1020946_0.HTM'
];
url.forEach(element => {
    (async () => {
        const browser = await puppeteer.launch({
            executablePath: 'C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe',
            headless: false
        });
        const page = await browser.newPage();
        await page.setViewport({
            width: 1920,
            height: 1080
        });
        await page.goto(element);
        // await browser.close();
    })();
});