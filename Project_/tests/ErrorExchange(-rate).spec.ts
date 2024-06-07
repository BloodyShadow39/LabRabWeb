import { test, expect } from '@playwright/test';

test('Отрицательное количество валюты', async ({ page }) => {
  await page.goto('http://192.168.1.63/');
  await page.getByLabel('В валюту Австралийский Доллар Болгарский Лев Бразильский Реал Канадский Доллар Ш').selectOption('IDR');
  await page.getByLabel('Количество').click();
  await page.getByLabel('Количество').fill('-19999');
  await page.getByLabel('Количество').press('Enter');
  await expect (page.locator("body")).toHaveText("Колличество валюты не может быть отрицательной, либо равна нулю");
});