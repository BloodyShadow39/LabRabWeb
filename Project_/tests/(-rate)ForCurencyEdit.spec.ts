import { test, expect } from '@playwright/test';

test('Отрицательное число для создания/изменения валюты', async ({ page }) => {
  await page.goto('http://192.168.1.63/Edit.php?currency=JPY&rate=-1999');
  await page.getByText('Нельзя ввести отрицательное число').click();
  await expect (page.locator("body")).toHaveText("Нельзя ввести отрицательное число");
});