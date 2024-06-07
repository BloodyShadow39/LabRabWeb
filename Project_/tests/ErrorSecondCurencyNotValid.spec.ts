import { test, expect } from '@playwright/test';

test('Вторая валюта не существует', async ({ page }) => {
  await page.goto('http://192.168.1.63/Exchange.php?From=AUD&Amount=10');
  await expect (page.locator("body")).toHaveText("Переводимой валюты не существует");
});