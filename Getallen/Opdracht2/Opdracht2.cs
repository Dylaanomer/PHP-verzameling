using System;

namespace Opdracht2
{
    class Opdracht2
    {
        static void Main(string[] args)
        {
            Leesgeheelgetal();
        }

        private static void Leesgeheelgetal()
        {
            bool geheelgetal = false;
            int getal1 = default;

            do
            {
                Console.Write("Voer een getal in : ");
                var invoer1 = Console.ReadLine();

                try
                {
                    getal1 = int.Parse(invoer1);
                    if (getal1 > 4)
                    {
                        Console.WriteLine("Vul een getal tussen 1 en 4 in");
                    }
                    else
                    {
                        geheelgetal = true;
                    }
                }
                catch
                {
                    Console.WriteLine($"{getal1} is geen getal");
                }
            } while (!geheelgetal);
            cards(getal1);
        }

        private static void cards(int getal1)
        {
            switch (getal1)
            {
                case 1:
                    Console.WriteLine($"U heeft gekozen voor 1: schoppen");
                    break;
                case 2:
                    Console.WriteLine($"U heeft gekozen voor 2: harten");
                    break;
                case 3:
                    Console.WriteLine($"U heeft gekozen voor 1: klaveren");
                    break;
                case 4:
                    Console.WriteLine($"U heeft gekozen voor 1: ruiten");
                    break;
            }
        }
    }
}
