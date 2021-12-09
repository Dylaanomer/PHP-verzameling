using static System.Console;

namespace Rekenaar
{
    public static class Rekenen
    {
        public static int Leesgeheelgetal()
        {
            bool geheelgetal = false;
            int getal = default;

            do
            {
                Write("Voer een getal in : ");
                var invoer = ReadLine();

                try
                {
                    getal = int.Parse(invoer);
                    geheelgetal = true;
                }
                catch
                {
                    WriteLine($"{invoer} is geen getal");
                }
            } while (!geheelgetal);
            return getal;
        }

        public static int Som(int getal1, int getal2)
        {

            int som = getal1 + getal2;
            return som;
        }

        public static int Verschil (int getal1, int getal2)
        {
            int verschil = getal1 - getal2;
            return verschil;
        }

        public static int Product(int getal1, int getal2)
        {
            int product = getal1 * getal2;
            return product;
        }

    }
}
