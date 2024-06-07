import { test, expect } from '@playwright/test';

test('Удаление Валюты', async ({ page }) => {
  await page.goto('http://192.168.1.63/Delete.php?currency[]=ZAR');
  await page.getByText('Данная валюта 1 была удалена').click();
  await expect (page.locator("body")).toHaveText('Данная валюта 1 была удалена');
});