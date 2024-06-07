import { test, expect } from '@playwright/test';

test('Тест перевода с одной валюты в другую', async ({ page }) => {
  await page.goto('http://192.168.1.63/');
  await page.getByLabel('Из валюты Австралийский Доллар Болгарский Лев Бразильский Реал Канадский Доллар ').selectOption('EUR');
  await page.getByLabel('В валюту Австралийский Доллар Болгарский Лев Бразильский Реал Канадский Доллар Ш').selectOption('JPY');
  await page.getByLabel('Количество').click();
  await page.getByLabel('Количество').fill('1');
  await page.getByRole('button', { name: 'Конвектировать' }).click();
  await expect (page.locator("body")).toHaveText("168.29");
});