import { test, expect } from '@playwright/test';

test('Несуществующая валюта для создания', async ({ page }) => {
  await page.goto('http://192.168.1.63/edit.php?currency=SAS');
  await page.getByText('Такая валюта SAS не существует').click();
  await expect (page.locator("body")).toHaveText("Такая валюта SAS не существует");
});