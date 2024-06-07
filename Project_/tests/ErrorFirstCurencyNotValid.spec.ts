import { test, expect } from '@playwright/test';

test('Первая валюта не существует', async ({ page }) => {
  await page.goto('http://192.168.1.63/Exchange.php?Amount=1To=ISK');
  await expect (page.locator("body")).toHaveText("Переводимой валюты не существует");
});