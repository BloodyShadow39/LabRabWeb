import { test, expect } from '@playwright/test';

test('Изменение валюты', async ({ page }) => {
  await page.goto('http://192.168.1.63/Edit.php?currency=JPY&rate=168.00');
  await page.getByText('Хочу изменить валюту JPY на значение 168.00').click();
  await expect (page.locator("body")).toHaveText('Хочу изменить валюту JPY на значение 168.00');
});