-- Table: public.profiles

-- DROP TABLE public.profiles;

CREATE TABLE public.profiles
(
    username character varying(50) COLLATE pg_catalog."default" NOT NULL,
    text character varying(4096) COLLATE pg_catalog."default",
    CONSTRAINT profiles_pkey PRIMARY KEY (username),
    CONSTRAINT "user" UNIQUE (username),
    CONSTRAINT username FOREIGN KEY (username)
        REFERENCES public.members (username) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.profiles
    OWNER to xlyavewwvaqkzy;